<img @php if ($class) { echo 'class="' . $class . '"'; } if ($id) { echo 'id="' . $id . '"'; } @endphp alt="{{$alt}}" src="/assets/build/images/{{ $src }}.webp" srcset="
@php
    $sizes = [150, 300, 600, 900, 1200, 1800, 2400, 3600];
    $first = true;
    foreach ($sizes as $i => $size) {
      $path = "/assets/build/images/sizes/" . $src . "-" .$size . ".webp";
      if (file_exists(public_path($path))) {
        if (!$first) {
            echo ", ";
        }
        $first = false;
        echo $path . " " . $size . "w";
      }
    }
@endphp " />
