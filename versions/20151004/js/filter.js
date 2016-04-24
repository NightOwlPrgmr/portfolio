// allow sorting an array in reverse
app.filter('reverse', function() {
  return function(items) {
    return items.slice().reverse();
  };
});