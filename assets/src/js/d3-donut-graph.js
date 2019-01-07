const dims = { height: 180, width: 300, radius: 150 };
const cent = { x: dims.width / 2 + 5, y: dims.height / 2 + 70 };

const svg = d3
  .select('.canvas')
  .append('svg')
  .attr('width', dims.width + 150)
  .attr('height', dims.height + 150);

const graph = svg
  .append('g')
  .attr('transform', `translate(${cent.x}, ${cent.y})`);

const pie = d3
  .pie()
  .sort(null)
  .value((d) => d.cost);

// STATIC DATA
// const angles = pie([
//   { name: 'rent', cost: 500 },
//   { name: 'bills', cost: 300 },
//   { name: 'gaming', cost: 200 }
// ]);

const arcPath = d3
  .arc()
  .outerRadius(dims.radius)
  .innerRadius(dims.radius / 2);

// COLORS
const color = d3.scaleOrdinal(d3['schemeSet3']);

// LEGEND SETUP
const legendGroup = svg
  .append('g')
  .attr('transform', `translate(${dims.width + 30}, 10)`);

const legend = d3
  .legendColor()
  .shape('circle')
  .shapePadding(10)
  .scale(color);

// TOOL TIP SETUP
const tip = d3
  .tip()
  .attr('class', 'tip card')
  .html((d) => {
    let content = `<div class="name">${d.data.name}</div>`;
    content += `<div class="cost">${d.data.cost}</div>`;
    content += `<div class="delete">Click slice to delete</div>`;
    return content;
  });

graph.call(tip);

// UPDATE FUNCTION
const update = (data) => {
  // UPDATE COLOR SCALE DOMAIN
  color.domain(data.map((d) => d.name));

  // UPDATE AND CAL LEGEND
  legendGroup.call(legend);
  legendGroup.selectAll('text').attr('fill', 'white');

  // JOIN ENHANCED (PIE) DATA TO PATH ELEMENTS
  const paths = graph.selectAll('path').data(pie(data));

  // HANDLE EXIT SELECTION
  paths
    .exit()
    .transition()
    .duration(750)
    .attrTween('d', arcTweenExit)
    .remove();

  // HANDLE THE CURRENT DOM PATH UPDATES
  paths
    .attr('d', arcPath)
    .transition()
    .duration(750)
    .attrTween('d', arcTweenUpdate);

  // console.log(paths.enter());
  paths
    .enter()
    .append('path')
    .attr('class', 'arc')
    .attr('stroke', '#fff')
    .attr('stroke-width', 3)
    .attr('fill', (d) => color(d.data.name))
    .each(function(d) {
      this._current = d;
    })
    .transition()
    .duration(750)
    .attrTween('d', arcTweenEnter);

  // ADD EVENTS
  graph
    .selectAll('path')
    .on('mouseover', (d, i, n) => {
      tip.show(d, n[i]);
      handleMouseOver(d, i, n);
    })
    .on('mouseout', (d, i, n) => {
      tip.hide();
      handleMouseOut(d, i, n);
    })
    .on('click', handleClick);
};

// FIREBASE ACCESS - ON SNAPSHOT
let data = [];

db.collection('expenses').onSnapshot((res) => {
  res.docChanges().forEach((change) => {
    const doc = { ...change.doc.data(), id: change.doc.id };
    switch (change.type) {
      case 'added':
        data.push(doc);
        break;
      case 'modified':
        const index = data.findIndex((item) => item.id == doc.id);
        data[index] = doc;
        break;
      case 'removed':
        data = data.filter((item) => item.id !== doc.id);
        break;
      default:
        break;
    }
  });

  update(data);
});

const arcTweenEnter = (d) => {
  let i = d3.interpolate(d.endAngle, d.startAngle);

  return function(t) {
    d.startAngle = i(t);
    return arcPath(d);
  };
};

const arcTweenExit = (d) => {
  let i = d3.interpolate(d.startAngle, d.endAngle);

  return function(t) {
    d.startAngle = i(t);
    return arcPath(d);
  };
};

// USE FUNCTION KEYWORD TO USE 'THIS' KEY WORD
function arcTweenUpdate(d) {
  // INTERPOLATE BETWEEN THIS 2 OBJECTS
  let i = d3.interpolate(this._current, d);

  // UPDATE THE CURRENT PROP WITH NEW UPDATED DATA
  this._current = d;

  return function(t) {
    return arcPath(i(t));
  };
}

// EVENT HANDLERS
const handleMouseOver = (d, i, n) => {
  // console.log(n[i]);
  d3.select(n[i])
    .transition('changeSliceFill')
    .duration(500)
    .attr('fill', '#000');
};

const handleMouseOut = (d, i, n) => {
  // console.log(n[i]);
  d3.select(n[i])
    .transition('changeSliceFill')
    .duration(500)
    .attr('fill', color(d.data.name));
};

const handleClick = (d) => {
  // console.log(d);
  const id = d.data.id;
  db.collection('expenses')
    .doc(id)
    .delete();
};
