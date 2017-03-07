// return b
function b(cb) {
  console.log('b')
  cb()
}

// return ¿? --> a
b(function() {
  console.log('a')
})
