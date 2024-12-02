#!/usr/bin/env python3
#
# Copyright 2024 The Khronos Group Inc.
# SPDX-License-Identifier: Apache-2.0

# map_chunks - map spec HTML chunks produced by asciidoctor-chunker to the
# corresponding page on docs.vulkan.org

# Usage: map_chunks file.html [file.html ...]

import argparse
import sys
from lxml import etree

# Map from chapter anchors to corresponding Antora page name (without '.html')
chapterAnchorMap = {
    'NvSciBuf-extension-page' : 'appendices/VK_NV_external_memory_sci_buf',
    'NvSciSync-extension-page' : 'appendices/VK_NV_external_sci_sync',
    'NvSciSync2-extension-page' : 'appendices/VK_NV_external_sci_sync2',
    'VK_KHR_shader_controls_v4_incompatibility' : 'appendices/VK_KHR_shader_float_controls',
    'acceleration-structure' : 'chapters/accelstructures',
    'anti-lag' : 'chapters/VK_AMD_anti_lag',
    'boilerplate' : 'appendices/boilerplate',
    'capabilities' : 'chapters/capabilities',
    'clears' : 'chapters/clears',
    'cluster-culling' : 'chapters/VK_HUAWEI_cluster_culling_shader/clusterculling',
    'commandbuffers' : 'chapters/cmdbuffers',
    'compressed_image_formats' : 'appendices/compressedtex',
    'copies' : 'chapters/copies',
    'credits' : 'appendices/credits',
    'debugging' : 'chapters/debugging',
    'debugging-debug-markers' : 'chapters/VK_EXT_debug_marker',
    'debugging-debug-report-callbacks' : 'chapters/VK_EXT_debug_report',
    'debugging-debug-utils' : 'chapters/VK_EXT_debug_utils',
    'deferred-host-operations' : 'chapters/VK_KHR_deferred_host_operations/deferred_host_operations',
    'descriptorsets' : 'chapters/descriptorsets',
    'device-generated-commands' : 'chapters/device_generated_commands/generatedcommands',
    'devsandqueues' : 'chapters/devsandqueues',
    'dispatch' : 'chapters/dispatch',
    'drawing' : 'chapters/drawing',
    'executiongraphs' : 'chapters/executiongraphs',
    'extendingvulkan' : 'chapters/extensions',
    'extensions' : 'appendices/extensions',
    'fault-handling' : 'chapters/fault_handling',
    'features' : 'chapters/features',
    'features-amigoProfiling' : 'appendices/VK_SEC_amigo_profiling',
    'features-descriptorSetHostMapping' : 'appendices/VK_VALVE_descriptor_set_host_mapping',
    'formats' : 'chapters/formats',
    'fragmentdensitymapops' : 'chapters/fragmentdensitymapops',
    'fragops' : 'chapters/fragops',
    'framebuffer' : 'chapters/framebuffer',
    'fundamentals' : 'chapters/fundamentals',
    'fxvertex' : 'chapters/fxvertex',
    'geometry' : 'chapters/geometry',
    'initialization' : 'chapters/initialization',
    'interfaces' : 'chapters/interfaces',
    'introduction' : 'chapters/introduction',
    'invariance' : 'appendices/invariance',
    'lexicon' : 'appendices/glossary',
    'limits' : 'chapters/limits',
    'memory' : 'chapters/memory',
    'memory-decompression' : 'chapters/VK_NV_memory_decompression',
    'memory-model' : 'appendices/memorymodel',
    'mesh' : 'chapters/VK_NV_mesh_shader/mesh',
    'micromap' : 'chapters/VK_EXT_opacity_micromap/micromaps',
    'opticalflow' : 'chapters/VK_NV_optical_flow/optical_flow',
    'pipelines' : 'chapters/pipelines',
    'pipelines-compiler-control' : 'chapters/VK_AMD_pipeline_compiler_control',
    'preamble' : 'chapters/preamble',
    'primsrast' : 'chapters/primsrast',
    'private-data' : 'chapters/VK_EXT_private_data',
    'queries' : 'chapters/queries',
    'ray-tracing' : 'chapters/raytracing',
    'ray-traversal' : 'chapters/raytraversal',
    'renderpass' : 'chapters/renderpass',
    'resources' : 'chapters/resources',
    'roadmap' : 'appendices/roadmap',
    'samplers' : 'chapters/samplers',
    'shaders' : 'chapters/shaders',
    'sparsememory' : 'chapters/sparsemem',
    'spirvenv' : 'appendices/spirvenv',
    'synchronization' : 'chapters/synchronization',
    'tessellation' : 'chapters/tessellation',
    'textures' : 'chapters/textures',
    'versions' : 'appendices/versions',
    'vertexpostproc' : 'chapters/vertexpostproc',
    'video-coding' : 'chapters/videocoding',
    'vk::ext_capability(ShaderInvocationReorderNV)' : 'appendices/VK_NV_ray_tracing_invocation_reorder',
    'vulkansc-deviations' : 'appendices/vulkanscdeviations',
    'wsi' : 'chapters/VK_KHR_surface/wsi',
}

# Base URL of the docs site with the Antora pages
baseDocsURL = 'https://docs.vulkan.org/spec/latest'

if __name__ == '__main__':
    parser = argparse.ArgumentParser()

    parser.add_argument('files', metavar='filename', nargs='*',
                        help='Path to registry XML')
    args = parser.parse_args()

    errCount = 0

    # Map the index file
    print(f'RewriteRule ^index.html$ {baseDocsURL}/chapters/introduction.html [L,NC,R=301]')

    for filename in args.files:
        parser = etree.HTMLParser()
        tree = etree.parse(filename, parser)

        # Find the first '<h2 id=' element, which contains the page anchor
        id_elem = tree.find('.//h2[@id]')

        if id_elem is not None:
            id = id_elem.get('id')
            if id in chapterAnchorMap:
                page = chapterAnchorMap[id]
                print(f'RewriteRule ^{filename}$ {baseDocsURL}/{page}.html [L,NC,R=301]')
                # print('{:<40} -> {}'.format(filename, chapterAnchorMap[id]))
            else:
                print('{:<40} -> ANCHOR "{}" NOT FOUND'.format(filename, id), file=sys.stderr)
                errCount += 1
        else:
            print('{:<40} -> NO ID FOUND'.format(filename), file=sys.stderr)
            errCount += 1

    sys.exit(errCount)
