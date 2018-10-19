{!! isset($blok['_editable']) ? $blok['_editable'] : '' !!}
<div>
@foreach ($blok['body'] as $blok)
  @include('components/' . $blok['component'], ['blok' => $blok])
@endforeach
</div>