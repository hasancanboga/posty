@props(['hasError'])

<textarea {{ $attributes(['class' => $hasError ? 'border-red-500' : '']) }}>
    {{ $slot }}
  </textarea>
