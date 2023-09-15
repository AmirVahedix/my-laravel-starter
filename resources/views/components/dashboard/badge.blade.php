@props([
    "type",
    "colors" => [
        "success" => "bg-green-500",
        "done" => "bg-green-500",
        "danger" => "bg-red-500",
        "warning" => "bg-yellow-400",
        "primary" => "bg-blue-500",
        "accepted" => "bg-green-500",
        "rejected" => "bg-red-500",
        "pending" => "bg-yellow-400",
        "waiting" => "bg-amber-500",
        "failed" => "bg-red-500",
        "canceled" => "bg-red-500"
    ],
])

<span
    {!! $attributes->merge(
        [
            'class' => $colors[$type] . " text-white px-1 rounded text-xs"
        ]
    )!!}
>
    {{ $slot }}
</span>
