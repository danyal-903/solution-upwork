<template>
  <div id="app">
    <div style="padding: 40px">
      <TopSection />
      <MiddleSection />
      <BottomComponent />
    </div>
  </div>
</template>

<script>
import TopSection from './components/TopSection.vue'
import MiddleSection from './components/MiddleSection.vue'
import BottomComponent from './components/BottomComponent.vue'

export default {
  name: 'App',
  components: {
    BottomComponent,
    MiddleSection,
    TopSection
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
