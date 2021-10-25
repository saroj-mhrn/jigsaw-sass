# Local Development

Site is using the https://jigsaw.tighten.co static site generator.

1. composer install
2. npm install
3. npm run watch - this will open a http://localhost link in your browser and all changes will live reload (html changes, css changes, and js changes)

# Code Location

- all code is in the source folder.
- content can be edited in the various .blade.php files
- CSS/JS changes can be made in the `_assets` directory

# Image Hosting

Images can be put in two places: `source/_assets/images` and `source/assets/images` (note the `_`).

Images placed in `source/_assets/images` will be transformed via the `responsive-loader` and `ImageminWebpackPlugin` into various sizes of webp format. Images placed in `source/assets/images` will not be transformed, which is useful for favicons, SVGs, and other images that don't need responsive handling.

When the toolchain runs, it emits the transformed images to `source/assets/build/images` and the `sizes` folder underneath that. For some reason, the images directly in `build/images` are malformed, and only the ones in `sizes` can be used.

Then, `jigsaw` runs and copies all images from `assets/build/images` (the transformed ones) and `assets/images` (the non-transformed ones) into `build_local` or `build_production`. The transformed ones are then accessible via `http://localhost/assets/build/images/<etc>` and the non-transformed ones at `http://localhost/assets/images/<etc>`.
