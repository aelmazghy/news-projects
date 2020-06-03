import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    news:[
      {
        "id":"1",
        "date":"2020-05-30",
        "title":"Lorem Ipsum is simply",
        "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...",
        "imag":"news/img/img1.jpg",
        "imgAlt":"Lorem Ipsum is simply alt",
        "urltext":"Découvrir le menu spécial",
        "urlLink":"linkPdf.com",
        "urlType":"pdf"
      },
      {
        "id":"2",
        "date":"2020-05-30",
        "title":"Lorem Ipsum is simply 2",
        "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...",
        "imag":"news/img/img2.jpg",
        "imgAlt":"Lorem Ipsum is simply alt",
        "urltext":"Plus d'infos",
        "urlLink":"/actualites",
        "urlType":"interne"
      },
      {
        "id":"3",
        "date":"2020-05-30",
        "title":"Lorem Ipsum is simply 3",
        "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...",
        "imag":"news/img/img3.jpg",
        "imgAlt":"Lorem Ipsum is simply alt",
        "urltext":"En savoir plus sur les animations",
        "urlLink":"linkExterne.com",
        "urlType":"externe"
      },
      {
        "id":"4",
        "date":"2020-05-30",
        "title":"Lorem Ipsum is simply 3",
        "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...",
        "imag":"news/img/img3.jpg",
        "imgAlt":"Lorem Ipsum is simply alt",
        "urltext":"",
        "urlLink":"",
        "urlType":"none"
      }
  ]
  },
  getters: {
    mynews: state => {
      var mynews = state.news.map(newsData => {
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
    /*formatDate(date){
      moment(testDate).format('MM/DD/YYYY');
    },*/
  }
})
