/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

/* Enable theme(s) */
am4core.useTheme(am4themes_animated);

 var chart = am4core.create("chartOrganigrama", am4plugins_forceDirected.ForceDirectedTree);
 var organigramaSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())
 
 let data = [
  {
    name: "Renato",
    value:6,
    collapsed:true,
    image: "./assets/img/PNG/Renato Ortiz.png",
    children: [
      {
        name: "Zamira Morales",
        value:4,
        collapsed:true,
        image: "./assets/img/PNG/Zamira Morales.png",
        children: [
          { 
            name: "Carolina Gaona",
            "image": "./assets/img/PNG/Carolina Gaona.png",
            value: 3
          }
        ]
      },
      {
        name: "Patricia",
        value:4,
        collapsed:true,
        image: "./assets/img/PNG/Patricia Palma.png"
      },
      {
        name: "Guadalupe Escamilla",
        value:4,
        image: "./assets/img/PNG/Guadalupe Escamilla.png",
        collapsed:true,
        children: [
          { 
            name: "Eduardo Rendon",
            "image": "./assets/img/PNG/Eduardo Rendon.png", 
            value: 3
          },
          { 
            name: "Roberto Pacheco",
            "image": "./assets/img/PNG/Roberto Rivera.png", 
            value: 3
          },
          { 
            name: "karen Avila",
            value: 3,
            "image": "./assets/img/PNG/Karen Avila.png",
            collapsed:true,
            children: [
              { 
                name: "Andrea Garcia",
                "image": "./assets/img/PNG/Andrea Garcia.png", 
                value: 2
              },
              { 
                name: "Martinz Vazquez",
                "image": "./assets/img/PNG/Martin Vazquez.png", 
                value: 2
              },
              { 
                name: "Fernanda Cardenas",
                "image": "./assets/img/PNG/Fernanda Cardenas.png", 
                value: 2 
              },
            ],
          }
        ]
      },
      {
        name: "Vania Jimenez",
        value: 4,
        image: "./assets/img/PNG/Vania Jimenez.png"
      }

    ]
  }
];


chart.data = data;
 
organigramaSeries.dataFields.value = "value";
organigramaSeries.dataFields.name = "name";
organigramaSeries.dataFields.id = "name";
organigramaSeries.dataFields.children = "children";
organigramaSeries.dataFields.linkWith = "link";
organigramaSeries.dataFields.collapsed="collapsed"
organigramaSeries.minRadius = 45;
// Configure circles
organigramaSeries.nodes.template.circle.disabled = true;
organigramaSeries.nodes.template.outerCircle.disabled = true;


// organigramaSeries.events.on("inited", function() {
//   organigramaSeries.animate({
//     "from": 0,
//     "to": 3,
//     "property": "velocityDecay"
//   }, 20000);
// });

//show childs Renato ortiz
setTimeout(()=> {
  data[0].collapsed = false; 
  chart.data= data;
  //show childs Zamira
  setTimeout(()=> {
    data[0].children[1].collapsed = false; 
    chart.data= data;
    //show childs Zamira
    setTimeout(()=> {
      data[0].children[3].collapsed = false; 
      chart.data= data;
      setTimeout(()=> {
        data[0].children[3].children[2].collapsed = false; 
        chart.data= data;
      },1000);
    },1000);

  },1000);

},2000);
//Hidden child
// organigramaSeries.maxLevels = 1;
// // Expand single level only
organigramaSeries.nodes.template.expandAll = false;
// Configure icons
var icon = organigramaSeries.nodes.template.createChild(am4core.Image);
icon.propertyFields.href = "image";
icon.horizontalCenter = "middle";
icon.verticalCenter = "middle";
icon.width = 250;
icon.height =  250;
// icon.widthRatio = 0.9;

organigramaSeries.centerStrength = 0.4;


organigramaSeries.links.template.strokeWidth = 2;
organigramaSeries.dataFields.fixed = "fixed";
