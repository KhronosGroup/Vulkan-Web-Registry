# Vulkan-Web-Registry

The Vulkan-Web-Registry repository contains the Vulkan API and Extension
Registry, including generated specifications and reference pages, and
reference cards. The sources for these documents are mostly found in the
separate https://github.com/KhronosGroup/Vulkan-Docs repository; this
repository is used as a backing store for the web view of the registry at
https://www.khronos.org/registry/vulkan/ . Commits to the master branch of
Vulkan-Web-Registry will be reflected in the web view.

Interesting files in this repository include:

* index.php - toplevel index page for the web view. This relies on PHP
  include files found elsewhere on www.khronos.org and so is not very useful
  in isolation.
* specs/1.0/ - Vulkan core API specifications and reference pages and API
  reference card.
* specs/1.0-wsi_extensions/ - Vulkan API specification including KHR
  extensions approved by Khronos.
* specs/1.0-extensions/ - Vulkan API specification including all registered
  and published extensions from Khronos, vendors, and other authors.
* specs/misc/ - GL_KHR_vulkan_glsl extension used to enable Vulkan features
  in OpenGL Shading Language (GLSL) compilers.
