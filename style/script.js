// Define the data for the line chart
var data = {
  labels: ["2018-19", "2019-20", "2020-21", "2021-22","2022-23","01/2023-10/2023"], // The time labels for the x-axis
  datasets: [
    {
      label: "Amount Loaned (In Rupees)", // The name of the data series
      data: [112500,270500,501100,607000,540477,626352], // The actual data values for the y-axis
      fill: false, // Whether to fill the area under the line or not
      borderColor: "rgb(75, 192, 192)", // The color of the line
      tension: 0.1 // The amount of curvature of the line
    }
  ]
};

// Get the canvas element where the chart will be drawn
var ctx = document.getElementById("loanchart").getContext("2d");

// Create a new line chart object
var lChart = new Chart(ctx, {
  type: "line", // The type of chart
  data: data, // The data for the chart
  options: {
    responsive: true, // Whether to resize the chart based on the container size
    plugins: {
      legend: {
        position: "top" // Where to display the legend
      },
      title: {
        display: true, // Whether to show the title
        text: "Outstanding Amount Loaned" // The text of the title
      }
    }
  }
});
var data2 = {
  labels: ["2018-19", "2019-20", "2020-21", "2021-22","2022-23","01/2023-10/2023"], // The time labels for the x-axis
  datasets: [
    {
      label: "Fixed Deposit Amount reserved in banks (Rupees)", // The name of the data series
      data: [220000,305000,383322,619217,1050183,1094010], // The actual data values for the y-axis
      fill: false, // Whether to fill the area under the line or not
      borderColor: "rgb(75, 192, 192)", // The color of the line
      tension: 0.1 // The amount of curvature of the line
    }
  ]
};

// Get the canvas element where the chart will be drawn
var ctx = document.getElementById("fdchart").getContext("2d");

// Create a new line chart object
var fChart = new Chart(ctx, {
  type: "line", // The type of chart
  data: data2, // The data for the chart
  options: {
    responsive: true, // Whether to resize the chart based on the container size
    plugins: {
      legend: {
        position: "top" // Where to display the legend
      },
      title: {
        display: true, // Whether to show the title
        text: "Amount kept in reserves of the bank" // The text of the title
      }
    }
  }
});

var data3 = {
  labels: ["2018-19", "2019-20", "2020-21", "2021-22","2022-23","01/2023-10/2023"], // The time labels for the x-axis
  datasets: [
    {
      label: "Number of Members of the society", // The name of the data series
      data: [67,76,84,85,89,85], // The actual data values for the y-axis
      fill: false, // Whether to fill the area under the line or not
      borderColor: "rgb(75, 192, 192)", // The color of the line
      tension: 0.1 // The amount of curvature of the line
    }
  ]
};

// Get the canvas element where the chart will be drawn
var ctx = document.getElementById("memberchart").getContext("2d");

// Create a new line chart object
var mChart = new Chart(ctx, {
  type: "line", // The type of chart
  data: data3, // The data for the chart
  options: {
    responsive: true, // Whether to resize the chart based on the container size
    plugins: {
      legend: {
        position: "top" // Where to display the legend
      },
      title: {
        display: true, // Whether to show the title
        text: "Active Member Count" // The text of the title
      }
    }
  }
});

var data4 = {
  labels: ["2018-19", "2019-20", "2020-21", "2021-22","2022-23","01/2023-10/2023"], // The time labels for the x-axis
  datasets: [
    {
      label: "Income of the Society (INR)", // The name of the data series
      data: [21796,61493,126048,224316,353209,414151], // The actual data values for the y-axis
      fill: false, // Whether to fill the area under the line or not
      borderColor: "rgb(75, 192, 192)", // The color of the line
      tension: 0.1 // The amount of curvature of the line
    }
  ]
};

// Get the canvas element where the chart will be drawn
var ctx = document.getElementById("dirincchart").getContext("2d");

// Create a new line chart object
var dirincchart = new Chart(ctx, {
  type: "line", // The type of chart
  data: data4, // The data for the chart
  options: {
    responsive: true, // Whether to resize the chart based on the container size
    plugins: {
      legend: {
        position: "top" // Where to display the legend
      },
      title: {
        display: true, // Whether to show the title
        text: "Direct Income of the society" // The text of the title
      }
    }
  }
});

var data5 = {
  labels: ["2018-19", "2019-20", "2020-21", "2021-22","2022-23","01/2023-10/2023"], // The time labels for the x-axis
  datasets: [
    {
      label: "Dividend Paid By the Society", // The name of the data series
      data: [4516,21342,52736,101208,177661,177778], // The actual data values for the y-axis
      fill: false, // Whether to fill the area under the line or not
      borderColor: "rgb(75, 192, 192)", // The color of the line
      tension: 0.1 // The amount of curvature of the line
    }
  ]
};

// Get the canvas element where the chart will be drawn
var ctx = document.getElementById("dividendchart").getContext("2d");

// Create a new line chart object
var dirincchart = new Chart(ctx, {
  type: "line", // The type of chart
  data: data5, // The data for the chart
  options: {
    responsive: true, // Whether to resize the chart based on the container size
    plugins: {
      legend: {
        position: "top" // Where to display the legend
      },
      title: {
        display: true, // Whether to show the title
        text: "Dividend Paid out by the society (INR)" // The text of the title
      }
    }
  }
});


document.addEventListener("DOMContentLoaded", function(){

    el_autohide = document.querySelector('.autohide');
    
    // add padding-top to bady (if necessary)
    navbar_height = document.querySelector('.navbar').offsetHeight;
    //document.body.style.paddingTop = navbar_height + 'px';
  
    if(el_autohide){
      var last_scroll_top = 0;
      window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
           if(last_scroll_top < scroll_top) {
                el_autohide.classList.remove('scrolled-down');
                el_autohide.classList.add('scrolled-up');
            }
            else {
                el_autohide.classList.remove('scrolled-up');
                el_autohide.classList.add('scrolled-down');
            }
            last_scroll_top = scroll_top;
      }); 
      // window.addEventListener
    }
    // if
  
  }); 