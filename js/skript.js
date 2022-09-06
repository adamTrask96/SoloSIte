ymaps.ready(init);

function init() {
  let map = new ymaps.Map("map", {
    center: [53.380199492884735,58.98407230642463],
    zoom: 19
  });
  
  map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
  map.controls.remove('typeSelector'); // удаляем тип
  map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил
  map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
  
  let placemark = new ymaps.Placemark([53.380199492884735,58.98407230642463], {}, {
    
  });
  map.geoObjects.add(placemark);
}