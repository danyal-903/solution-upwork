<template>
  <div>
      <vs-row vs-w="12">
        <vs-col vs-w="6"
                style="justify-content: start"
        >
          <div class="center content-inputs">
            <div>
              <vs-textarea placeholder="Who is this invoice from?"
                           style="width: 15rem; height: 3rem; padding-bottom: 5rem"
              >

              </vs-textarea>
            </div>
            <div style="display: flex; flex-direction: row;">
              <div>
                <p>Bill to</p>
                <vs-textarea  placeholder="Who is this invoice to?" style="width: 14rem"></vs-textarea>
              </div>
              <div style="padding-left: 10px">
                <p>Ship to</p>
                <vs-textarea placeholder="(Optional)" style="width: 14rem">

                </vs-textarea>
              </div>
            </div>

          </div>
        </vs-col>
              <vs-col vs-w="6">
                <div class="center content-inputs" style="float: right">

                  <div style="">
                    <vs-input
                        warn
                        label="INVOICE"
                        v-model="invoiceNumber"
                        style="
                        margin-left: 134px;
              padding-bottom: 50px;
                    "
                    />
                  </div>

                  <div style="display: flex; flex-direction: row">
                    <p style="padding-right: 100px">Date</p>
                    <vs-input
                        warn
                        style="
              padding-bottom: 5px ;
                    "
                    />
                  </div>
                  <div style="display: flex; flex-direction: row">
                    <p style="padding-right: 23px">Payment Terms</p>
                    <vs-input
                        warn
                        style="
              padding-bottom: 5px ;
                    "
                    />
                  </div>
                  <div style="display: flex; flex-direction: row">
                    <p style="padding-right: 67px">Due Date</p>
                    <vs-input
                        warn
                        style="
              padding-bottom: 5px ;
                    "
                    />
                  </div>
                  <div style="display: flex; flex-direction: row">
                    <p style="padding-right: 50px">PO Number</p>
                    <vs-input
                        warn
                        style="
              padding-bottom: 5px ;
                    "
                    />
                  </div>
                </div>
              </vs-col>
      </vs-row>


  </div>
</template>

<script>
export default {
  name: "TopSection.vue",
  data:()=>({
    invoiceNumber: 0,
  }),
  created() {
    this.getInvoiceNumber();
  },
  methods: {
    getInvoiceNumber () {
      this.invoiceNumber = this.$store.state.invoice_number;
    }
  }
}
</script>

<style scoped>
 /*div{
   display: flex;
   flex-direction: row;
 }*/
</style>