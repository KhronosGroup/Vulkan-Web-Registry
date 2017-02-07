<?php
$static_title = 'Khronos Vulkan Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'Vulkan Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos Vulkan&reg; Registry</h1>
<div id="mainformat">

<h1 style="text-align:center"> Khronos Vulkan&reg; Registry </h1>

<p> The Vulkan registry contains formatted specifications of the Vulkan API,
    header files, API reference pages, the reference card, and related
    documentation. The registry also links to the GitHub repository where
    the sources for these documents can be found.

<p> Graphics and compute shaders for Vulkan are defined using an
    intermediate representation called SPIR-V, for which specifications
    and headers are published in the <a
    href="https://www.khronos.org/registry/spir-v/">SPIR-V Registry</a>.
    There are a variety of compilers and other tools for generating
    SPIR-V code. We encourage developers to explore related Vulkan
    material starting at the top-level <a
    href="https://www.khronos.org/vulkan/">Vulkan landing page</a>.
    There is also a link below to an OpenGL Shading Language extension
    allowing use of SPIR-V shaders. </p>

<p> Index to the Vulkan registry page content: </p>

<ul>
    <li> <a href="#apispecs"/> <b>API Specifications</b> </a> </li>
    <li> <a href="#dataformat"/> <b>Khronos Data Format Specification</b> </a> </li>
    <li> <a href="#styleguide"/> <b>Vulkan Procedures and Conventions</b>
         </a> (formerly the ``API Style Guide'') </li>
    <li> <a href="#refguide"/> <b>API Quick Reference</b> </a> </li>
    <li> <a href="#refpages"/> <b>API Reference Pages</b> </a> </li>
    <li> <a href="#repos"/> <b>Vulkan Github Repositories</b>
        <ul>
        <li> <a href="#repo-docs"/> <b>API and Extension Specification Repository</b> </a>
            <ul>
            <li> <a href="#headers"/> <b>Header Files</b> </a> </li>
            <li> <a href="#apiregistry"/> <b>API Registry</b> </a> </li>
            </ul> </li>
        <li> <a href="#repo-cts"/> <b>Conformance Test Suite Repository</b> </a> </li>
        <li> <a href="#repo-loader"/> <b>Loader and Validation Layers Repository</b> </a> </li>
        <li> <a href="#repo-samples"/> <b>Sample Code Repository</b> </a> </li>
        </ul> </li>
</ul>


<h2> <a name="apispecs"></a> <b>API Specifications</b> </h2>

<p> We currently publish the Vulkan API Specification in PDF and HTML
    (single-page) forms. There are three different specifications provided:
    the <b>core</b> Vulkan API; the Vulkan API including the family of
    Khronos-defined KHR extensions - especially the Window-System Interface
    extensions used to post images to a display on different platforms and
    window systems; and the Vulkan API including all registered Khronos,
    EXT, and vendor extensions. </p>

<ul>
<li> <b>Vulkan 1.0 Core API</b>
     <a href="specs/1.0/html/vkspec.html">(HTML)</a>
     <a href="specs/1.0/pdf/vkspec.pdf">(PDF)</a> </li>
<li> <b>Vulkan 1.0 Core API + Khronos KHR Extensions</b>
     <a href="specs/1.0-wsi_extensions/html/vkspec.html">(HTML)</a>
     <a href="specs/1.0-wsi_extensions/pdf/vkspec.pdf">(PDF)</a> </li>
<li> <b>Vulkan 1.0 Core API + all published Extensions</b>
     <a href="specs/1.0-extensions/html/vkspec.html">(HTML)</a>
     <a href="specs/1.0-extensions/pdf/vkspec.pdf">(PDF)</a> </li>
</ul>


<h2> <a name="dataformat"></a> <b>Khronos Data Format Specification</b> </h2>

<p> The <a href="https://www.khronos.org/registry/dataformat/"> Data
    Format Specification</a> (version 1.1) defines compressed texture
    formats used by Vulkan, and portions of that specification are
    incorporated into the Vulkan API Specification by reference. </p>


<h2> <a name="styleguide"></a> <b>Vulkan Procedures and Conventions</b> </h2>

<p> The <a href="specs/1.0/styleguide.html">Vulkan Documentation: Procedures
    and Conventions</a> document (formerly the ``API Style Guide'') defines
    mandatory and recommended conventions and best practices used in
    creating and modifying the API Specification and extensions . Authors
    wishing to write Vulkan extension specifications or contribute to
    existing specifications should familiarize themselves with this document
    and follow its recommendations. </p>


<h2> <a name="refguide"></a> <b>API Quick Reference</b> </h2>

<p> The <a href="specs/1.0/refguide/Vulkan-1.0-web.pdf">API Quick
    Reference</a> is a compact document summarizing the Vulkan API commands,
    structures, and enumerants. </p>

<p> The <a href="specs/1.0/refguide/VulkanQuickRef.zip"> InDesign sources
    for the reference guide</a> are also available, formatted as a
    <b>.zip</b> file. </p>


<h2> <a name="refpages"></a> <b>API Reference Pages</b> </h2>

<p> The Vulkan API Reference Pages describe how to use individual core
    API and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be
    some omissions. In addition to the formats published here, it is
    possible to generate other formats from the reference page sources,
    such as Unix nroff man page sources.</p>

<ul>
<li> <b>Vulkan 1.0 Reference Pages</b>
     <a href="specs/1.0/apispec.pdf">(PDF, single file)</a>
     <a href="specs/1.0/apispec.html">(HTML, single file)</a>
     <a href="specs/1.0/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>

<p> As of the July 15, 2016 update, the reference pages are generated by
    automatic extraction from the Specification source, and are not checked
    into GitHub. The set of pages linked above are generated from the core
    API specification, but sets of pages including arbitrary extensions can
    be generated in the same fashion as specifications including arbitrary
    extensions. </p>

<h2> <a name="repos"></a> <b> Vulkan Github Repositories </b> </h2>


<h3> <a name="repo-docs"></a> <b>API and Extension Specification Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Docs">
    Vulkan-Docs</a> repository contains the Asciidoc source for the Vulkan
    core API specification, and for registered Vulkan API extensions. </p>

<p> All published extension specifications are included in the <a
    href="https://github.com/KhronosGroup/Vulkan-Docs/tree/1.0">1.0</a> git
    branch. Specifications and reference pages can be built with or without
    different combinations of extensions by appropriate invocation of the
    Makefile. This is a major difference from versions of the Specification
    prior to 1.0.24, where each extension existed on its own git branch. The
    branches still exist for historical purposes but are increasingly out of
    date. </p>

<p> Registered and published extensions are listed below, grouped by
    Author/Vendor ID. The links are into the corresponding extension
    appendices of the <a href="specs/1.0-extensions/html/vkspec.html">
    Vulkan 1.0 Core API + all published Extensions</a> Specification. This
    list is driven by the <tt>supported</tt> tags in
    <tt>src/spec/vk.xml</tt> in Vulkan-Docs, and may contain anomalies in
    the form of links to extensions marked as supported by a vendor, but
    whose specifications have not yet been merged into the Vulkan-Docs
    repository. </a>

<!-- Generated from /src/spec/indexExt.py in the spec repository -->
<?php include_once("extensions.php"); ?>

<p> The Vulkan-Docs repository also contains the <a
    href="specs/misc/GL_KHR_vulkan_glsl.txt">GL_KHR_vulkan_glsl</a>
    extension to the OpenGL Shading Language. The purpose of this extension
    is to be used with an offline GLSL compiler generating SPIR-V code for
    use with Vulkan; therefore it does not appear in the OpenGL Extension
    Registry at this time. The master copy of the extension specification is
    located under <b>doc/specs/misc/</b> in the Vulkan-Docs repository.

<p> Currently, Vulkan-Docs also contains the header files, API Registry, and
    reference page sources. We hope to soon refactor the repositories to
    separate these documents from the specifications. </p>


<h4> <a name="headers"></a> <b>Header Files</b> </h4>

<p> For most developers, the header files provided with a loader and/or
    driver package, such as the one defined in the <a
    href="#repo-loader"> loader and validation layers</a> Github
    repository, are all that's needed. </p>

<p> However, all Vulkan headers provided by Khronos are ultimately
    obtained from the <a href="#repo-docs"> Vulkan-Docs</a> repository
    You may clone this repository and copy the headers from
    <b>src/vulkan/vulkan.h</b> and <b>src/vulkan/vk_platform.h</b>; or,
    if you need to generate a customized version of the headers, use the
    <a href="#apiregistry">API Registry</a> and scripts under
    <b>src/spec/</b>. </p>

<p> <i>Note: we hope to soon refactor the repositories to separate the
    headers and reference pages from the specifications</i>. </p>


<h4> <a name="apiregistry"></a> <b>API Registry</b> </h4>

<p> Vulkan defines an API Registry for the core API and extensions,
    formally defining command prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The Vulkan
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    Asciidoc include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<p> The Registry is in an XML file called <b>vk.xml</b> and currently
    located in the <a href="#repo-docs"> Vulkan-Docs</a> repository
    under <b>src/spec</b>. This directory also includes a formal Relax
    NG XML schema and scripts used to generate the various outputs. </p>

<p> <a href="specs/1.0/registry.html"> Documentation of the XML schema</a>
    is available. </p>

<h3> <a name="repo-cts"></a> <b>Conformance Test Suite Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-CTS">
    Vulkan-CTS</a> repository contains the source code for the Vulkan
    Conformance Tests. Note that while the CTS source code is freely
    available, you must be a Khronos Adopter and pay the Adopter Fee in
    order to use the Vulkan trademark for your implementation. </p>


<h3> <a name="repo-loader"></a> <b>Loader and Validation Layers Repository</b> </h3>

<p> The <a
    href="https://github.com/KhronosGroup/Vulkan-LoaderAndValidationLayers">
    Vulkan-LoaderAndValidationLayers</a> repository contains source code
    implementing a loader for hardware drivers, and a variety of validation
    layers which may be enabled during development. This code is also
    available as part of prebuilt packages in the <a
    href="https://vulkan.lunarg.com/"> LunarG Vulkan SDK</a>. </p>


<h3> <a name="repo-samples"></a> <b>Sample Code Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Samples">
    Vulkan-Samples</a> repository contains sample code showing use of
    Vulkan, contributed by various Khronos members and other authors.
    </p>


<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
