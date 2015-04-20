function cc_format(value) {
  var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
  var matches = v.match(/\d{4,16}/g);
  var match = matches && matches[0] || ''
  var parts = []
  for (i=0, len=match.length; i<len; i+=4) {
    parts.push(match.substring(i, i+4))
  }
  if (parts.length) {
    return parts.join(' ')
  } else {
    return value
  }
}

var elem_card_num = document.getElementsByClassName('card-number')[0];
elem_card_num.value = cc_format(elem_card_num.value);
elem_card_num.addEventListener("change", function(){elem_card_num.value = cc_format(elem_card_num.value);});
console.log(elem_card_num.value);