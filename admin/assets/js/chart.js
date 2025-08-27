 const ctx = document.getElementById('moneyChart').getContext('2d');

    const moneyChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
          {
            label: 'Money In',
            data: [5, 6, 4, 7, 8, 6, 9, 10, 7, 6, 5, 7],
            borderColor: '#8a99b554',
            fill: false,
            tension: 0.4,
          },
          {
            label: 'Money Out',
            data: [3, 5, 6, 4, 6, 7, 5, 6, 8, 4, 6, 5],
            borderColor: '#ff66006b',
            fill: false,
            tension: 0.4,
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
            labels: {
              color: '#8a99b5',
              boxWidth: 10,
              boxHeight: 10
            }
          },
          tooltip: {
            mode: 'index',
            intersect: false
          }
        },
        scales: {
          x: {
            ticks: {
              color: '#8a99b5'
            },
            grid: {
              display: false
            }
          },
          y: {
            ticks: {
              callback: (value) => `₦${value}k`,
              color: '#8a99b5'
            },
            grid: {
              borderDash: [6, 6],
              color: '#38466c'
            }
          }
        }
      }
    });