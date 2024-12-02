<?php
$static_title = 'Khronos Vulkan Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The Vulkan registry contains formatted specifications of the Vulkan API,
    header files, API reference pages, the reference card, and related
    documentation. The registry also links to the GitHub repository where
    the sources for these documents can be found. </p>

<p> Graphics and compute shaders for Vulkan are defined using an
    intermediate representation called SPIR-V, for which specifications
    and headers are published in the <a
    href="https://www.khronos.org/registry/spir-v/">SPIR-V Registry</a>.
    There are a variety of compilers and other tools for generating
    SPIR-V code. We encourage developers to explore related Vulkan
    material starting at the top-level <a
    href="https://www.khronos.org/vulkan/">Vulkan landing page</a>. </p>

<p> The <a href="https://github.com/KhronosGroup/GLSL">GLSL Shading
    Language</a> GitHub repository contains OpenGL Shading Language
    extensions to be used with an offline GLSL compiler generating SPIR-V
    code for use with Vulkan. These specifications were previously
    maintained in the Vulkan-Docs repository and published in the Vulkan
    Registry. </p>


<p> Index to the Vulkan Registry page content: </p>

<ul>
    <li> <a href="#apispecs"/> <b>Vulkan API Specification</b> </a> </li>
    <li> <a href="#refpages"/> <b>Vulkan API Reference Pages</b> </a> </li>
    <li> <a href="#dataformat"/> <b>Khronos Data Format Specification</b> </a> </li>
    <li> <a href="#styleguide"/> <b>Vulkan Documentation and Extensions:
         Procedures and Conventions</b> </a> (the &ldquo;Style Guide&rdquo;)
         </li>
    <li> <a href="#repos"/> <b>Vulkan GitHub Repositories</b>
        <ul>
        <li> <a href="#repo-docs"/> <b>API and Extension Specification Repository</b> </a>
            <ul>
            <li> <a href="#headers"/> <b>Header Files</b> and <b>Valid Usage Database</b></a> </li>
            <li> <a href="#apiregistry"/> <b>API Registry</b> </a> </li>
            </ul> </li>
        <li> <a href="#repo-cts"/> <b>Conformance Test Suite Repository</b> </a> </li>
        <li> <a href="#repo-loader"/> <b>Loader and Validation Layers Repositories</b> </a> </li>
        <li> <a href="#repo-samples"/> <b>Sample Code Repository</b> </a> </li>
        </ul> </li>
    <li> <a href="#feedback"> <b>Providing Feedback on the Registry</b> </a>
</ul>


<h2> <a name="apispecs"></a> <b>Vulkan API Specifications</b> </h2>

<p> We publish the current Vulkan API Specification in PDF and HTML forms.

<p> The best way to read the Specification is on the <a
    href="https://docs.vulkan.org/">Vulkan Documentation</a> site, which
    includes the API specification and a variety of related documents, such
    as the Vulkan Guide and Vulkan Samples, in a format where each
    Specification chapter is a single HTML page. </p>

<p> For legacy purposes, and when a single document is needed, a single-file
    <a href="specs/latest/html/vkspec.html">HTML Specification</a> is hosted
    in this registry along with a <a href="specs/latest/pdf/vkspec.pdf">PDF
    Specification</a> suitable for offline use. </p>

<p> The published Specification includes the latest Vulkan API version
    together with all registered extensions.
    Comments in the Specification describe which API core version and/or
    extension provides each element of the API. </p>

<p> In the past, we published different versions of the Specification for
    each core version, core version plus all ratified extensions, and core
    version plus all registered extensions.
    As of December 2024, we are <b>only</b> publishing the latest core
    version plus all registered extensions.
    Additionally, we no longer publish the separate &quot;chunked&quot; HTML
    Specification documents, which are replaced by the Vulkan Documentation
    site.
    We have attempted to redirect these older forms of the Specification
    meaningfully.
    If you experience redirection problems, please file an <a
    href="https://github.com/KhronosGroup/Vulkan-Web-Registry/issues"> issue
    </a> in the GitHub project hosting the registry and include the URL you
    were attempting to reach. </p>

<p> If you require a build of the Specification for a different combination
    of core version and extensions, it can be built from the
        <a href="https://github.com/KhronosGroup/Vulkan-Docs">Vulkan-Docs</a>
    repository. </p>

<ul>
<li> <b>Current Vulkan Core API + all published Extensions</b>
     <a href="https://docs.vulkan.org/">(Vulkan Documentation Site)</a>
     <a href="specs/latest/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/latest/pdf/vkspec.pdf">(PDF)</a>.
     This Specification includes all registered Vulkan extensions which have
     been incorporated into the Specification Repository, including
     <tt>KHR</tt>, <tt>EXT</tt>, and vendor extensions. </li>
</ul>


<h2> <a name="dataformat"></a> <b>Khronos Data Format Specification</b> </h2>

<p> The <a href="https://www.khronos.org/registry/dataformat/"> Data
    Format Specification</a> (version 1.3) defines compressed texture
    formats used by Vulkan, and portions of that specification are
    incorporated into the Vulkan API Specification by reference. </p>


<h2> <a name="styleguide"></a> <b>Vulkan Documentation and Extensions:
     Procedures and Conventions</b> </h2>

<p> The <a href="specs/latest/styleguide.html">Vulkan Documentation and
    Extensions: Procedures and Conventions</a> document (colloquially, the
    &ldquo;Style Guide&rdquo;) defines mandatory and recommended conventions
    and best practices used in creating and modifying the API Specification
    and extensions. Authors wishing to write Vulkan extension
    specifications, or contribute to existing specifications, should
    familiarize themselves with and adhere to this document. </p>


<h2> <a name="refpages"></a> <b>API Reference Pages</b> </h2>

<p> The Vulkan API Reference Pages describe how to use individual core API
    and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be some
    omissions. In addition to the format published here, it is possible to
    generate other formats from the reference page sources, such as PDF or
    Unix <tt>nroff</tt> man page sources.</p>

<ul>
<li> <b>Vulkan API Reference Pages</b>
     <a href="specs/latest/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>

<p> The reference pages are generated by automatic extraction from the
    Specification source, and are not checked into GitHub.
    The set of pages linked above are generated from the API Specification
    including all extensions. </p>


<h2> <a name="repos"></a> <b> Vulkan GitHub Repositories </b> </h2>

<h3> <a name="repo-docs"></a> <b>API and Extension Specification Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Docs">
    Vulkan-Docs</a> repository contains the Asciidoctor source for the Vulkan
    core API specification, and for registered Vulkan API extensions. </p>

<p> All published extension specifications are included in the <tt><a
    href="https://github.com/KhronosGroup/Vulkan-Docs/tree/main">main</a></tt>
    git branch. Specifications and reference pages can be built with or
    without different combinations of extensions by appropriate invocation
    of the Makefile. </p>

<p> All versions of the Vulkan Specification can be generated out of the
    <tt>main</tt> branch. </p>

<p> Other branches in the repository are of historical interest only. </p>

<p> Registered and published extensions are listed below, grouped by
    Author/Vendor ID.
    The links are to extension reference pages; these pages are quick to
    load compared to the full <a
    href="specs/latest/html/vkspec.html"> Vulkan Core API + all
    published Extensions </a> Specification, and they link back to it if
    more information or context is needed.
    The list of links is generated based on the <tt>supported</tt> tags in
    <tt>xml/vk.xml</tt> in Vulkan-Docs, and may contain anomalies in the
    form of links to extensions marked as supported by a vendor, but whose
    specifications have not yet been merged into the Vulkan-Docs repository.
    </a> </p>

<!-- Generated from xml/indexExt.py in the Vulkan-Docs repository -->
<?php include_once("extensions.php"); ?>

<p> Vulkan-Docs also contains the header files, API Registry, and
    reference page sources. </p>


<h4> <a name="headers"></a> <b>Header Files</b> </h4>

<p> For most developers, the C header files provided with a loader and/or
    driver package, such as the one defined in the <a href="#repo-loader">
    loader and validation layers</a> GitHub repository, are all that's
    needed.
    We provide a canonical version of these headers corresponding to spec
    updates in the <a href="#vulkan-headers">
    KhronosGroup/Vulkan-Headers</a> repository.
    These headers also include a C++ header generated from the <a
    href="#vulkan-hpp"> Vulkan-Hpp</a> project. </p>

<p> The Vulkan-Headers repository also includes a
    <a href="https://github.com/KhronosGroup/Vulkan-Headers/blob/main/registry/validusage.json">JSON file
    containing Valid Usage ID (VUID) tags</a> (and corresponding valid usage
    statements) extracted from the specification sources. This is used only
    by the validation layer, at present. </p>

<p> All Vulkan headers provided by Khronos are ultimately generated from the
    <a href="#repo-docs"> Vulkan-Docs</a> repository. If the headers in
    Vulkan-Headers aren't sufficient, you may clone the Vulkan-Docs
    repository and generate headers yourself, following instructions there.
    If you need to generate a customized version of the headers, modify the
    <a href="#apiregistry">API Registry</a> and scripts under <b>xml/</b>.
    </p>

<p> Note: there are two static headers included in Vulkan-Docs,
    <tt>vk_platform.h</tt> and <tt>vulkan.h</tt>. These are static headers
    that are not generated from the Vulkan-Docs repository. </p>


<h4> <a name="apiregistry"></a> <b>API Registry</b> </h4>

<p> Vulkan defines an API Registry for the core API and extensions,
    formally defining command prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The Vulkan
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    Asciidoctor include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<p> The Registry is in an XML file called <b>vk.xml</b> located in the <a
    href="#repo-docs">Vulkan-Docs</a> repository under <b>xml/</b>.
    This directory also includes a formal RELAX&nbsp;NG XML schema and
    scripts used to generate the various outputs. </p>

<p> <a href="specs/latest/registry.html"> Documentation of the XML schema</a>
    is available. </p>

<h3> <a name="repo-cts"></a> <b>Conformance Test Suite Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/VK-GL-CTS">VK-GL-CTS</a>
    repository contains the source code for the Vulkan Conformance Tests.
    Note that while the CTS source code is freely available, you must be a
    Khronos Adopter and pay the Adopter Fee in order to use the Vulkan
    trademark for your implementation. </p>


<h3> <a name="repo-loader"></a> <b>Loader and Validation Layers Repositories</b> </h3>

<p> There are several additional Khronos Github repositories containing
    Vulkan source code, libraries, and tools: </p>

<ul>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Headers" id="vulkan-headers">
     Vulkan-Headers</a> repository contains a copy of the Vulkan XML API
     Registry and scripts for processing it, taken from the latest public
     specification update in the <a href="#repo-docs"> Vulkan-Docs</a>
     project, and the corresponding generated Vulkan API headers. </li>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Tools" id="vulkan-tools">
     Vulkan-Tools</a> repository contains Khronos official Vulkan Tools and
     Utilities for Windows, Linux, Android, and MacOS. </li>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-ValidationLayers" id="vulkan-layers">
     Vulkan-ValidationLayers</a> repository contains the Khronos official
     Vulkan validation layers for Windows, Linux, Android, and MacOS. </li>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Loader" id="vulkan-loader">
     Vulkan-Loader</a> repository contains the Vulkan loader that is used
     for Linux, Windows, MacOS, and iOS. </li>
</ul>

<h3> <a name="repo-samples"></a> <b>Sample Code Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Samples">
    Vulkan-Samples</a> repository contains sample code showing use of
    Vulkan, contributed by various Khronos members and other authors.
    </p>

<h3> <a name="repo-other"></a> <b>Other Repositories</b> </h3>

<p> Other Khronos repositories containing Vulkan material include: </p>

<ul>
<li> The <a href="https://github.com/KhronosGroup/Vulkan-Hpp"
     id="vulkan-hpp"> Vulkan-Hpp</a> repository contains code used to
     generate <tt>vulkan.hpp</tt>, a C++ binding for Vulkan. A version of
     <tt>vulkan.hpp</tt> is included in the <a
     href="#vulkan-headers">Vulkan-Headers</a> repository. </li>
</ul>

<h3> <a name="feedback"></a> <b>Providing Feedback on the Registry</b> </h3>

<p> Khronos welcomes comments and bug reports. To provide feedback on the
    Vulkan registry itself (such as reporting missing content, bad links,
    etc.), file an issue in the <a
    href="https://github.com/KhronosGroup/Vulkan-Web-Registry/issues">
    Vulkan-Web-Registry </a> Github project. </p>

<p> For the Vulkan Specification or other documentation and tools, file an
    Issue on the appropriate <a href="#repos">GitHub Repository</a>. </p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
