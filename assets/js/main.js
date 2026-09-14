// FuzzyStocking — shared site behavior
document.addEventListener('DOMContentLoaded', function () {

  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      links.classList.toggle('open');
      var expanded = links.classList.contains('open');
      toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });
  }

  // Testimonial carousel arrow buttons
  var track = document.querySelector('.testi-track');
  var prevBtn = document.querySelector('[data-testi-prev]');
  var nextBtn = document.querySelector('[data-testi-next]');
  if (track && prevBtn && nextBtn) {
    var scrollAmt = 360;
    prevBtn.addEventListener('click', function () { track.scrollBy({ left: -scrollAmt, behavior: 'smooth' }); });
    nextBtn.addEventListener('click', function () { track.scrollBy({ left: scrollAmt, behavior: 'smooth' }); });
  }

  // Newsletter / contact form friendly feedback (no backend wiring by default)
  document.querySelectorAll('form[data-inline-feedback]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      var note = form.querySelector('.form-note');
      if (form.getAttribute('data-static') === 'true') {
        e.preventDefault();
        if (note) {
          note.textContent = "Thanks — you're on the list! Keep an eye on your inbox.";
          note.style.color = '#3F5B4E';
        }
        form.reset();
      }
    });
  });

  // Footer year
  document.querySelectorAll('[data-year]').forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });
});
