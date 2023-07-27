if (document.querySelector("#mapa")) {

    const lat = -30.95249680729432 
    const lng = -58.78521185078162
    const zoom = 16
  const map = L.map("mapa").setView([lat, lng], zoom);

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  L.marker([lat, lng])
    .addTo(map)
    .bindPopup(
        `
           <h2 class="mapa__geading">DevWebCamp</h2> 
           <p class="mapa__texto">Centro Cultural Municipal</p>
        `
    )
    .openPopup();
}
