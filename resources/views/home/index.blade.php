<h1>Hello From Laravel Course!</h1>

@include('shared.button', ['color' => 'cyan', 'text' => 'Submit'])

@includeif('shared.search_form')

@php
  $cars = [];
@endphp

@foreach($cars as $car)
  @include('car.view', ['car' => $car])
@endforeach

{{-- 'car.view':
This specifies the Blade view (resources/views/car/view.blade.php) that will be rendered for each item in the $cars collection.

$cars:
This is the collection (array or Eloquent collection) of data being iterated. Each item in $cars will be passed to the view specified (car.view).

'car':
This is the name of the variable that each individual item in the $cars collection will be available as within the car.view template. For example, in the car.view template, you can use $car to access the current item.

'car.empty':
This specifies a fallback Blade view (resources/views/car/empty.blade.php) to be rendered if the $cars collection is empty. This is optional, and if omitted, nothing will be displayed when the collection is empty. --}}

@each('car.view', $cars, 'car', 'car.empty')

{{-- This is the same --}}
<?php
  use Illuminate\Support\Str;

?>
{{-- This is the same --}}
@use('Illuminate\Support\Str')