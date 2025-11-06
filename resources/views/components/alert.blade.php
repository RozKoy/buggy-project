@props([
  'variant' => 'primary', 
])
@php    
  switch ($variant) {
    case 'primary':
        $alert_variant = "p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
        break;    
    case 'light':
        $alert_variant = "p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300";
        break;
    case 'warning':
        $alert_variant = "p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300";
        break;
    case 'danger':
        $alert_variant = "p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400";
        break;
    case 'success':
        $alert_variant = "p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400";
        break;
    default:
        $alert_variant = "p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
        break;
  }
@endphp

<div {{ $attributes->merge(['class' => "$alert_variant"]) }} role="alert">
  <span class="font-medium">{{ $slot }}</span>
</div>
