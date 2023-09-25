<div {{ $attributes->merge(['class' => 'card text-center p-2 text-dark']) }} class="">
    <div class="card-header">
      Featured
    </div>
    <div {{ $attributes->class(['card-body', 'bg-light' => $type]) }}>
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-body-secondary">
      2 days ago
    </div>
</div>
