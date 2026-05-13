<style>
.accordion-button {
    background-color: #000000 !important;
    color: white !important;
}
.accordion-button:not(.collapsed) {
    background-color: #000000 !important;
    color: white !important;
}
.accordion-button::after {
    filter: brightness(0) invert(1);
}
</style>

<div class="accordion" id="accordionExample">

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#hobby">
        <i class="bi bi-controller me-2"></i> Hobby
      </button>
    </h2>
    <div id="hobby" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
           <i class="bi bi-music-note-beamed text-primary me-2"></i>
            <strong>Main bola</strong><br>
          </li>
          <li class="list-group-item">
            <i class="bi bi-mic text-success me-2"></i>
            <strong>Memancing</strong><br>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#makanan">
        <i class="bi bi-egg-fried me-2"></i> Favorite Food
      </button>
    </h2>
    <div id="makanan" class="accordion-collapse collapse">
      <div class="accordion-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <i class="bi bi-cup-hot text-warning me-2"></i>
            <strong>Mie Ayam</strong><br>
          </li>
          <li class="list-group-item">
            <i class="bi bi-cup-hot text-warning me-2"></i>
            <strong>Bakso</strong><br>
          </li>
        </ul>
      </div>
    </div>
  </div>

  
</div>