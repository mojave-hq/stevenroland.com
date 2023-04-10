@props([
     'svg'
])

@include("_svg.{$svg}", ['attributes' => $attributes])
