import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);
const dataURL = './news/data/news.json';

export default new Vuex.Store({
  state: {

    news:[]

  },
  getters: {

  },
  actions: {
    getNews({ commit }, payload) {
      commit('set_news', payload)
    }
  },
  mutations: {
    set_news (state,  payload ){
      state.news = payload;
    }
  }
})


