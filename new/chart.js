
///pie
const chartData = {
    labels: ["transaction", "sales", "payouts", "reports"],
    data: [30, 25, 15, 30],
  };
  
  const myChart = document.querySelector(".my-chart");
  const ul = document.querySelector(".programming-stats .details ul");
  
  new Chart(myChart, {
    type: "doughnut",
    data: {
      labels: chartData.labels,
      datasets: [
        {
          label: "total of  ",
          data: chartData.data,
        },
      ],
    },
    options: {
      borderWidth: 1,
      borderRadius: 2,
      hoverBorderWidth: 0,
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });
  
  const populateUl = () => {
    chartData.labels.forEach((l, i) => {
      let li = document.createElement("li");
      li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
      ul.appendChild(li);
    });
  };
  
  populateUl();

///bar
  const data = {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: 'Weekly Sales',
      data: [18, 12, 6, 9, 12, 3, 9],
      backgroundColor: [
        'white',
        'white',
        'white',
        'white',
        'white',
        'white',
        'white'
      ],
      borderColor: [
          'black',
          'black',
          'black',
          'black',
          'black',
          'black',
          'black'
      ],
      borderWidth: 2,
      barPercentage: 0.5
    }]
  };
  
  // config 
  const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        
        x: {
          
          ticks: {
            color: 'white'
          }
        },
        

        y: {
        
          ticks: {
            color: 'white',
            beginAtZero: true,
          }
          }
     
        }
      }}
    
  ;
       // render init block
      const barChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  
      // Instantly assign Chart.js version
      const chartVersion = document.getElementById('chartVersion');
      chartVersion.innerText = Chart.version;




///linechart
