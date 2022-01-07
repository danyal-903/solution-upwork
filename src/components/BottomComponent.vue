<template>

  <div style="padding-top: 2rem;">
    <vs-row vs-w="12">
      <vs-col vs-w="6">
        <div>
          <p style="text-align: left">Notes</p>
          <vs-textarea  placeholder="Relevant Notes" style="width: 14rem"></vs-textarea>
        </div>
        <div>
          <p style="text-align: left">Terms</p>
          <vs-textarea placeholder="Terms and Conditions" style="width: 14rem">

          </vs-textarea>
        </div>
      </vs-col>
      <vs-col vs-w="6">
        <div style="float: right">
          <div style="display: flex; flex-direction: row;">
            <p style=" padding-right: 11rem; padding-bottom: 1rem">SubTotal</p>
            <p >US$0.000</p>
          </div>
          <div style="display: flex; flex-direction: row; padding-bottom: 2rem">
            <p style="padding-right: 100px">Date</p>
            <vs-input
                warn
                style="
              padding-bottom: 5px ;
                    "
            />
          </div>
          <div style="display: flex; flex-direction: row; padding-bottom: 1rem">
            <p style=" padding-right: 11rem">Total</p>
            <p>US$0.000</p>
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
            <p style=" padding-right: 11rem">Balance Due</p>
            <p>US$0.000</p>
          </div>
        </div>
      </vs-col>
    </vs-row>


  </div>
</template>

<script>
export default {
name: "BottomComponent.vue"
}
</script>

<style scoped>

</style>