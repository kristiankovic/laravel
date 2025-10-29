<div {{ $attributes->merge(['class'=>'p-4 my-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium"> {{ $title ?? 'Alert info!'}} </span> {{ $body }}
</div>