const vue =  Vue.createApp({
  data() {
    return {
      wines: [],
      searchKey: "",
      inputType: "",
      countryList: [],
      countryOption: [],
      countrySelected: "",
      grapesRadio: [
        { name: "Pinot Noir"},
        { name: "Sauvignon"},
        { name: "Merlot"},
        { name: "Chardonnay"},
      ],
      grapesSelected: ""
    }
  },
  methods: {
    removeItem(id) {
      this.wines = this.wines.filter((wine, key) => key !== id)
    },
    getImgUrl(pic) {
      return `assets/uploads/${pic}`
    },
    searchInput(type) {
      if (this.inputType === type) {
        this.inputType = ""
      } else {
        this.inputType = type
      }
    },
    cancelSearch() {
      this.searchKey = ""
      this.countrySelected = ""
      this.grapesSelected = ""
    }
  },
  computed: {
    search() {
      return this.wines.filter(wine => {
        return ( 
          wine.name.toLowerCase().includes(this.searchKey.toLowerCase()) && 
          wine.country.toLowerCase().includes(this.countrySelected.toLowerCase()) &&
          wine.grapes.toLowerCase().includes(this.grapesSelected.toLowerCase())
        )
      })
    }
  },
  mounted() {
    axios.get("libraries/controllers/getData.php")
      .then(res => res.data)
      .then(res => this.wines = res)
      .then(() => {
        for(let i = 0; i <= this.wines.length; i++) {
          if(!this.countryList.includes(this.wines[i].country)) {
            this.countryList.push(this.wines[i].country)
          }
        }
      })

      setTimeout(() => {
        let arr = this.countryList.sort()
        for (let i = 0; i < arr.length; i++) {
          this.countryOption.push({
            name: arr[i],
            id: arr[i]
          })
        }
      }, 500)
  }
}).mount("#vue-app")