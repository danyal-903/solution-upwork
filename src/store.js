import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// if in browser, use pre-fetched state injected by SSR


export default new Vuex.Store({
  state: {
    'invoice_number': '001234',
    'invoice_date': null,
    'invoice_terms': null,
    'po_number': null,
    'invoice_from_text': null,
    'bill_to': null,
    'ship_to': null,
    'items': [
      {'description': null, 'qty': 1, 'rate': 0},
      {'description': null, 'qty': 1, 'rate': 0},
      {'description': null, 'qty': 1, 'rate': 0}
    ],
    'notes': null,
    'terms_and_conditions': null,
    'tax_percent': null,
    'amount_paid': 0
  },
})
