#!/bin/bash
# Run map_chunks.py in each directory with a chunked spec, to generate a
# .htaccess file in that directory mapping to the docs.vulkan.org site.

for dir in specs/*/html ; do
    echo "Creating $dir/.htaccess"
    cd $dir
    if test -f .htaccess ; then
        echo "Backing up $dir/.htaccess -> $dir/OLD.htaccess"
        mv .htaccess OLD.htaccess
    fi
    # Try to get the chunks in chapter order
    ../../../map_chunks.py chap?.html chap??.html > .htaccess
    cd ../../..
done
