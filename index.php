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
    <li> <a href="#apispecs"/> <b>Vulkan 1.1 API Specifications</b> </a> </li>
    <li> <a href="#dataformat"/> <b>Khronos Data Format Specification</b> </a> </li>
    <li> <a href="#styleguide"/> <b>Vulkan Documentation and Extensions:
         Procedures and Conventions</b> </a> (the &ldquo;Style Guide&rdquo;)
         </li>
    <li> <a href="#refguide"/> <b>Vulkan 1.1 API Quick Reference</b> </a> </li>
    <li> <a href="#refpages"/> <b>Vulkan API Reference Pages</b> </a> </li>
    <li> <a href="#vulkan1.0"/> <b>Vulkan 1.0 Material</b> </a> </li>
    <li> <a href="#repos"/> <b>Vulkan GitHub Repositories</b>
        <ul>
        <li> <a href="#repo-docs"/> <b>API and Extension Specification Repository</b> </a>
            <ul>
            <li> <a href="#headers"/> <b>Header Files</b> </a> </li>
            <li> <a href="#apiregistry"/> <b>API Registry</b> </a> </li>
            </ul> </li>
        <li> <a href="#repo-cts"/> <b>Conformance Test Suite Repository</b> </a> </li>
        <li> <a href="#repo-loader"/> <b>Loader and Validation Layers Repositories</b> </a> </li>
        <li> <a href="#repo-samples"/> <b>Sample Code Repository</b> </a> </li>
        </ul> </li>
</ul>


<h2> <a name="apispecs"></a> <b>Vulkan 1.1 API Specifications</b> </h2>

<p> We currently publish the Vulkan API Specification in PDF and HTML forms.
    There are several versions of the Vulkan 1.1 Specification, as well as
    related Specifications and collateral material: </p>

<ul>
<li> <b>Vulkan 1.1 Core API</b>
     <a href="specs/1.1/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.1/html/index.html">(Chunked HTML)</a>
     <a href="specs/1.1/pdf/vkspec.pdf">(PDF)</a> </li>
<li> <b>Vulkan 1.1 Core API + Khronos-defined Extensions</b>
     <a href="specs/1.1-khr-extensions/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.1-khr-extensions/html/index.html">(Chunked HTML)</a>
     <a href="specs/1.1-khr-extensions/pdf/vkspec.pdf">(PDF)</a>.
     This Specification includes Khronos-defined <tt>KHR</tt> extensions
     such as the Window-System Interface Extensions used to post images to a
     display on different platforms and window systems. </li>
<li> <b>Vulkan 1.1 Core API + all published Extensions</b>
     <a href="specs/1.1-extensions/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.1-extensions/html/index.html">(Chunked HTML)</a>
     <a href="specs/1.1-extensions/pdf/vkspec.pdf">(PDF)</a>.
     This Specification includes all registered Vulkan extensions which have
     been incorporated into the Specification Repository, including KHR,
     EXT, and vendor extensions. </li>
<li> <a href="specs/1.1-extensions/validation/validusage.json">JSON file
     containing Valid Usage ID (VUID) tags</a> (and corresponding valid
     usage statements) extracted from the specification sources. This is
     used only by the validation layer, at present.
</ul>

<h2> <a name="dataformat"></a> <b>Khronos Data Format Specification</b> </h2>

<p> The <a href="https://www.khronos.org/registry/dataformat/"> Data
    Format Specification</a> (version 1.2) defines compressed texture
    formats used by Vulkan, and portions of that specification are
    incorporated into the Vulkan API Specification by reference. </p>


<h2> <a name="styleguide"></a> <b>Vulkan Documentation and Extensions:
     Procedures and Conventions</b> </h2>

<p> The <a href="specs/1.1/styleguide.html">Vulkan Documentation and
    Extensions: Procedures and Conventions</a> document (colloquially, the
    &ldquo;Style Guide&rdquo;) defines mandatory and recommended conventions
    and best practices used in creating and modifying the API Specification
    and extensions. Authors wishing to write Vulkan extension
    specifications, or contribute to existing specifications, should
    familiarize themselves with and adhere to this document. </p>


<h2> <a name="refguide"></a> <b>Vulkan 1.1 API Quick Reference</b> </h2>

<p> The <a href="specs/1.1/refguide/Vulkan-1.1-web.pdf">Vulkan 1.1 API Quick
    Reference (PDF)</a> is a compact document summarizing the Vulkan 1.1 API
    commands, structures, and enumerants.

<p> The <a href="specs/1.1/refguide/Vulkan-1.1-RefGuide.zip"> InDesign
    sources </a> for the Quick Reference are also available, formatted as a
    <b>.zip</b> file. </p>


<h2> <a name="refpages"></a> <b>API Reference Pages</b> </h2>

<p> The Vulkan API Reference Pages describe how to use individual core API
    and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be some
    omissions. In addition to the format published here, it is possible to
    generate other formats from the reference page sources, such as PDF or
    Unix <tt>nroff</tt> man page sources.</p>

<ul>
<li> <b>Vulkan 1.1 Reference Pages</b>
     <a href="specs/1.1-extensions/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>

<p> <b>Note:</b> As of the 1.1.73 update, we have replaced the 1.0 reference
    pages with 1.1 reference pages. However, we are no longer publishing the
    single-file HTML and PDF versions (<tt>apispec.html</tt> and
    <tt>apispec.pdf</tt>), because these documents are even larger than the
    1.1 API specifications. </p>

<p> The reference pages are generated by automatic extraction from the
    Specification source, and are not checked into GitHub. The set of pages
    linked above are generated from the 1.1 API specification including all
    extensions, but sets of pages including arbitrary extensions can be
    generated in the same fashion as generating specifications including
    arbitrary extensions. </p>


<h2> <a name="vulkan1.0"> </a> <b> Vulkan 1.0 Material </b> </h2>

<p> We still maintain the Vulkan 1.0 Specification and related documents,
    which include: </p>

<ul>
<li> <b>Vulkan 1.0 Core API</b>
     <a href="specs/1.0/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.0/html/index.html">(Chunked HTML)</a>
     <a href="specs/1.0/pdf/vkspec.pdf">(PDF)</a> </li>
<li> <b>Vulkan 1.0 Core API + Khronos-defined Extensions</b>
     <a href="specs/1.0-wsi_extensions/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.0-wsi_extensions/html/index.html">(Chunked)</a>
     <a href="specs/1.0-wsi_extensions/pdf/vkspec.pdf">(PDF)</a>.
     This Specification includes Khronos-defined <tt>KHR</tt> extensions
     such as the Window-System Interface Extensions used to post images to a
     display on different platforms and window systems. </li>
<li> <b>Vulkan 1.0 Core API + all published Extensions</b>
     <a href="specs/1.0-extensions/html/vkspec.html">(Single-file HTML)</a>
     <a href="specs/1.0-extensions/html/index.html">(Chunked HTML)</a>
     <a href="specs/1.0-extensions/pdf/vkspec.pdf">(PDF)</a>.
     This Specification includes all registered Vulkan extensions applicable
     to Vulkan 1.0 which have been incorporated into the Specification
     Repository, including KHR, EXT, and vendor extensions. </li>
     <br/>
     (<b>Note:</b> we have resumed posting up-to-date versions of the
     1.0+KHR extensions and 1.0+all extensions versions of the
     Specification, based on Github feedback. </li>
<li> The <a href="specs/1.0/refguide/Vulkan-1.0-web.pdf">Vulkan 1.0 API
     Quick Reference</a> is a compact document summarizing the Vulkan 1.0
     API commands, structures, and enumerants. </p>
<li> The <a href="specs/1.0/refguide/VulkanQuickRef.zip"> InDesign sources
     </a> for the 1.0 reference guide</a> are also available, formatted as a
     <b>.zip</b> file. </li>
</ul>


<h2> <a name="repos"></a> <b> Vulkan GitHub Repositories </b> </h2>

<h3> <a name="repo-docs"></a> <b>API and Extension Specification Repository</b> </h3>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Docs">
    Vulkan-Docs</a> repository contains the AsciiDoc source for the Vulkan
    core API specification, and for registered Vulkan API extensions. </p>

<p> All published extension specifications are included in the <tt><a
    href="https://github.com/KhronosGroup/Vulkan-Docs/tree/master">master</a></tt>
    git branch. Specifications and reference pages can be built with or
    without different combinations of extensions by appropriate invocation
    of the Makefile. </p>

<p> The <tt>1.0</tt> branch of the Vulkan-Docs repository is no longer
    maintained, since both 1.1 and 1.0 Specifications can be generated out
    of the <tt>master</tt> branch. </p>

<p> Other branches in the repository are of historical interest only. </p>

<p> Registered and published extensions are listed below, grouped by
    Author/Vendor ID. The links are into the corresponding extension
    appendices of the <a href="specs/1.1-extensions/html/vkspec.html">
    Vulkan 1.1 Core API + all published Extensions</a> Specification. This
    list is driven by the <tt>supported</tt> tags in
    <tt>xml/vk.xml</tt> in Vulkan-Docs, and may contain anomalies in
    the form of links to extensions marked as supported by a vendor, but
    whose specifications have not yet been merged into the Vulkan-Docs
    repository. </a>

<!-- Generated from xml/indexExt.py in the Vulkan-Docs repository -->
<?php include_once("extensions.php"); ?>

<p> Vulkan-Docs also contains the header files, API Registry, and
    reference page sources. </p>


<h4> <a name="headers"></a> <b>Header Files</b> </h4>

<p> For most developers, the C header files provided with a loader and/or
    driver package, such as the one defined in the <a href="#repo-loader">
    loader and validation layers</a> GitHub repository, are all that's
    needed. We also provide a canonical version of these headers
    corresponding to spec updates in the <a href="#vulkan-headers">
    KhronosGroup/Vulkan-Headers</a> repository. These headers also include a
    C++ header generated from the <a href="vulkan-hpp"> Vulkan-Hpp</a>
    project.</p>

<p> All Vulkan headers provided by Khronos are ultimately generated from the
    <a href="#repo-docs"> Vulkan-Docs</a> repository. If the headers in
    Vulkan-Headers aren't sufficient, you may clone the Vulkan-Docs
    repository and generate headers yourself, following instructions there.
    If you need to generate a customized version of the headers, modify the
    <a href="#apiregistry">API Registry</a> and scripts under <b>xml/</b>.
    </p>

<p> Note: there are two static headers included in Vulkan-Docs,
    <tt>vk_platform.h</tt> and <tt>vulkan.h</tt>. These are not a complete
    set of Vulkan headers, simply the static files that cannot be generated
    from the API Registry. </p>


<h4> <a name="apiregistry"></a> <b>API Registry</b> </h4>

<p> Vulkan defines an API Registry for the core API and extensions,
    formally defining command prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The Vulkan
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    AsciiDoc include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<p> The Registry is in an XML file called <b>vk.xml</b> and currently
    located in the <a href="#repo-docs">Vulkan-Docs</a> repository
    under <b>xml/</b>. This directory also includes a formal RELAX&nbsp;NG
    XML schema and scripts used to generate the various outputs. </p>

<p> <a href="specs/1.1/registry.html"> Documentation of the XML schema</a>
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
     Vulkan validation layers for Windows, Linux, Androis, and MacOS. </li>
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

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
