document.getElementById('button').onclick = function() {
                var load_image = new Image();
                load_image.src = 'ссылка до картинки загрузки';
                load_image.onload = function() {
                  document.getElementById('load').appendChild(load_image);
                  setTimeout(function() {
                      document.getElementById('load').innerHTML = 'Текст';
                  }, 2000);
                };
            };