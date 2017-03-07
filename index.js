// return b
function b() {
  console.log('b');
}

b()

// return ¿? --> b
b(function() {
  console.log('a');
})

// return c
function c(x) {
  console.log('c');
}

c()
