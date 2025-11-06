@props([
  'variant' => 'primary', 
  'size' => 'lg',
  'type' => 'button',
])
@php    
  $button_size = 'text-sm px-5 py-2.5';
  
  if ($size === 'sm') {
    $button_size = 'text-xs px-3 py-2';
  }

  switch ($variant) {
    case 'primary':
        $button_color = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg $button_size text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800";
        break;    
    case 'light':
        $button_color = "text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg $button_size dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700";
        break;
    case 'warning':
        $button_color = "focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg $button_size dark:focus:ring-yellow-900";
        break;
    case 'danger':
        $button_color = "focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg $button_size dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900";
        break;
    default:
        $button_color = "text-white bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg $button_size text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800";
        break;
  }
@endphp

<button 
    type="{{ $type }}" 
    {{ $attributes->merge(['class' => "$button_color"]) }}>
    {{ $slot }}
</button>
