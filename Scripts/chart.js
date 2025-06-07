document.addEventListener("DOMContentLoaded", function () {
  // Initialize weight chart
  const weightChart = document.getElementById("weight-chart");
  if (weightChart) {
    const chart = echarts.init(weightChart);
    const option = {
      animation: false,
      grid: {
        top: 20,
        right: 20,
        bottom: 40,
        left: 50,
      },
      tooltip: {
        trigger: "axis",
        backgroundColor: "rgba(255, 255, 255, 0.8)",
        borderColor: "#E2E8F0",
        textStyle: {
          color: "#1f2937",
        },
      },
      xAxis: {
        type: "category",
        data: [
          "May 22",
          "May 24",
          "May 26",
          "May 28",
          "May 30",
          "Jun 1",
          "Jun 3",
          "Jun 5",
          "Jun 7",
          "Jun 9",
          "Jun 11",
          "Jun 13",
        ],
        axisLine: {
          lineStyle: {
            color: "#E2E8F0",
          },
        },
        axisLabel: {
          color: "#1f2937",
        },
      },
      yAxis: {
        type: "value",
        min: 175,
        max: 190,
        axisLine: {
          lineStyle: {
            color: "#E2E8F0",
          },
        },
        axisLabel: {
          color: "#1f2937",
          formatter: "{value} lbs",
        },
        splitLine: {
          lineStyle: {
            color: "#E2E8F0",
            type: "dashed",
          },
        },
      },
      series: [
        {
          name: "Weight",
          type: "line",
          data: [
            189, 188, 187, 186.5, 185, 184.5, 184, 183.5, 183, 182.5, 182, 182,
          ],
          smooth: true,
          symbol: "none",
          lineStyle: {
            color: "rgba(87, 181, 231, 1)",
            width: 3,
          },
          areaStyle: {
            color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
              {
                offset: 0,
                color: "rgba(87, 181, 231, 0.3)",
              },
              {
                offset: 1,
                color: "rgba(87, 181, 231, 0.1)",
              },
            ]),
          },
        },
        {
          name: "Target",
          type: "line",
          data: [170, 170, 170, 170, 170, 170, 170, 170, 170, 170, 170, 170],
          lineStyle: {
            color: "rgba(252, 141, 98, 0.7)",
            type: "dashed",
            width: 2,
          },
          symbol: "none",
        },
      ],
    };
    chart.setOption(option);
    window.addEventListener("resize", function () {
      chart.resize();
    });
  }
});
