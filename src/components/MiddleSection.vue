<template lang="html">
  <div>
    <vs-table :data="users">
      <template slot="header">
        <h3 style="display: flex; align-items: center; padding-left: 1rem; height: 3rem;  ">
          Users
        </h3>
      </template>
      <template slot="thead" >
        <vs-th>
          Email
        </vs-th>
        <vs-th>
          Name
        </vs-th>
        <vs-th>
          Website
        </vs-th>
        <vs-th>
          Nro
        </vs-th>
      </template>

      <template slot-scope="{data}">
        <vs-tr :key="indextr" v-for="(tr, indextr) in data" >
          <vs-td :data="data[indextr].email" style=" display: flex; justify-content: start">
            {{data[indextr].email}}
          </vs-td>

          <vs-td :data="data[indextr].username" style=" display: flex; justify-content: start">
            {{data[indextr].name}}
          </vs-td>

          <vs-td :data="data[indextr].id"  >
            {{data[indextr].id}}
          </vs-td>

          <vs-td :data="data[indextr].id" style=" display: flex; justify-content: start" >
            {{data[indextr].website}}
          </vs-td>
        </vs-tr>
      </template>
    </vs-table>
    <vs-button v-on:click="addnewItem" color="primary" type="filled">Add Item</vs-button>
  </div>
</template>

<script>
export default {
  name: "MiddleSection.vue",
  data:()=>({
    users:[
      {
        "id": 1,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "website": "hildegard.org",
      },
    ]
  }),
  methods: {
    addnewItem: function () {
      this.users.push({
        "id": 2,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "website": "hildegard.org",
      })
    }
  }
}
</script>