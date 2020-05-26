import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    Ndata:[
      {id:"1",title:"Alan"},
      {id:"2",title:"Abdess"}
  ]
  },
  getters: {
    mynews: state => {
      var mynews = state.Ndata.map(newsData => {
        return{
          title: newsData.title
        }
      });
      return mynews;
    }
  },
  mutations: {

  },
  actions: {

  }
})
