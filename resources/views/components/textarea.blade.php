@props(['hasError'])

<textarea {{ $attributes(['class' => $hasError ? 'border-red-900' : '']) }}>
    {{ $slot }}
  </textarea>
