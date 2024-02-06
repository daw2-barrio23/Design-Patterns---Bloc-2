<?php
// Contenido del primer archivo HTML
$navHtml = '<nav class="navegacion" style="width: 1000px; margin: 30px auto; background: #fff;">
    <ul class="menu" style="list-style: none;">
        <li style="position: relative; display: inline-block;">
            <a href="#" style="display: block; padding: 15px 20px; color: #353535; font-family: \'Open sans\'; text-decoration: none;">Inicio</a>
        </li>
        <li style="position: relative; display: inline-block;">
            <a href="#" style="display: block; padding: 15px 20px; color: #353535; font-family: \'Open sans\'; text-decoration: none;">Nosotros</a>
        </li>
        <li style="position: relative; display: inline-block;">
            <a href="#" style="display: block; padding: 15px 20px; color: #353535; font-family: \'Open sans\'; text-decoration: none;">Servicios</a>
            <ul class="submenu" style="position: absolute; background: #333333; width: 120%; visibility: hidden; opacity: 0; transition: opacity 1.5s;">
                <li><a href="#" style="display: block; padding: 15px; color: #fff; font-family: \'Open sans\'; text-decoration: none;">Servicio #1</a></li>
                <li><a href="#" style="display: block; padding: 15px; color: #fff; font-family: \'Open sans\'; text-decoration: none;">Servicio #2</a></li>
                <li><a href="#" style="display: block; padding: 15px; color: #fff; font-family: \'Open sans\'; text-decoration: none;">Servicio #3</a></li>
            </ul>
        </li>
        <li style="position: relative; display: inline-block;">
            <a href="#" style="display: block; padding: 15px 20px; color: #353535; font-family: \'Open sans\'; text-decoration: none;">Contacto</a>
        </li>
    </ul>
</nav>';

// Contenido del segundo archivo HTML
$chartHtml = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart.js Example</title>
  <!-- Incluye Chart.js desde un CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div style="width: 80%; margin: auto;">
    <!-- Agrega un lienzo (canvas) para el gráfico -->
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // Funciones de generación de datos y etiquetas (debes implementarlas)
    function generateLabels() {
      // Implementa la lógica para generar las etiquetas
      // Retorna un array con las etiquetas
      return [\'Label 1\', \'Label 2\', \'Label 3\', \'Label 4\', \'Label 5\', \'Label 6\', \'Label 7\', \'Label 8\'];
    }

    function generateData() {
      // Implementa la lógica para generar los datos
      // Retorna un array con los datos
      return [10, 20, 15, 30, 23, 60, 33, 20];
    }

    // Objeto Utils con propiedades y métodos necesarios (debes implementar Utils)
    const Utils = {
      CHART_COLORS: {
        red: \'rgba(255, 0, 0, 1)\',
      },
      transparentize: (color) => {
        // Implementa la lógica para hacer el color transparente
        return color; // En este ejemplo, no se realiza la transformación real
      }
    };

    // Tu conjunto de datos
    const data = {
      labels: generateLabels(),
      datasets: [
        {
          label: \'Dataset\',
          data: generateData(),
          borderColor: Utils.CHART_COLORS.red,
          backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red),
          fill: false
        }
      ]
    };

    // Obtén el contexto del lienzo (canvas)
    const ctx = document.getElementById(\'myChart\').getContext(\'2d\');

    // Crea el gráfico utilizando Chart.js
    const myChart = new Chart(ctx, {
      type: \'line\', // Puedes cambiar el tipo de gráfico según tus necesidades
      data: data,
      options: {
        plugins: {
          filler: {
            propagate: false,
          },
          title: {
            display: true,
            text: (ctx) => \'Fill: \' + ctx.chart.data.datasets[0].fill
          }
        },
        interaction: {
          intersect: false,
        }
      },
    });
  </script>
</body>
</html>';

// Mostrar contenido por pantalla
echo $navHtml;
echo '<hr>'; // Separador entre los dos archivos
echo $chartHtml;
?>
