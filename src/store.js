import Vue from 'vue'
import Vuex from 'vuex'
import axios from "axios";

Vue.use(Vuex);
const dataURL = './news/data/news.json';

export default new Vuex.Store({
  state: {

    news:[]

  },
  getters: {
/*    mynews: state => {
      var mynews = state.news.map(newsData => {
        return{
          title: newsData.title
        }
      });
      return mynews;
    }

 */
  },

  actions: {

    getNews({ commit }, payload) {
      commit('set_news', payload)

      alert('ok');
    }


  },

  mutations: {

    set_news (state,  payload ){
      state.news = payload;
    }

  }
})


