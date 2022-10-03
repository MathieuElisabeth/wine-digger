<div id="vue-app" class="lobby-container">

  <div v-if="searchKey || countrySelected || grapesSelected" @click="cancelSearch" class="cancel">
    <h5>Cancel search</h5>
    <i class="fas fa-times"></i>
  </div>

  <ul>
    <li @click="searchInput('name')" class="name">
      <i class="fas fa-search"></i>
      <input v-if="inputType === 'name'" v-model="searchKey" type="search" class="search" placeholder="Search wine...">
    </li>

    <li @click="searchInput('country')" class="country">
      <i class="fas fa-globe-europe"></i>
      <select v-if="inputType === 'country'" v-model="countrySelected">
        <option value="">Choose a country</option>
        <option v-for="option in countryOption" :value="option.id">{{ option.name }}</option>
      </select>
    </li>

    <li @click="searchInput('grapes')" class="grapes">
      <i class="fas fa-wine-glass-alt"></i>
      <div v-if="inputType === 'grapes'" class="radio-container">
        <div v-for="grape in grapesRadio" class="radio">
          <label :for="grape.name">{{ grape.name }}</label>
          <input v-model="grapesSelected" type="radio" :value="grape.name" class="radio-button" id="grape.name">
        </div>
      </div>
    </li>
  </ul>

  <h1 v-if="inputType === ''" class="title">Liste des vins</h1>
  <h3 v-if="search.length === 0">No result</h3>

  <transition-group name="item-anim" tag="div" class="list-container">
    <div v-for="wine, id in search" :key="id" class="wine-list">
      <div class="wine-card">
        
        <div class="card-header">
          <h2>{{wine.name}}</h2>
          <i @click="removeItem(id)" class="fas fa-times"></i>
        </div>

        <div class="container">
          <div class="text-container">
            <div class="buttons">
              <h4>{{wine.region}}</h4>
              <h4>{{wine.country}}</h4>
              <h4>{{wine.grapes}}</h4>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt"></i>
              <span>{{wine.region}}</span>
            </div>
            <p>{{wine.description}}</p>
          </div>
          <img :src="getImgUrl(wine.picture)" alt="bouteille">
        </div>

      </div>
    </div>
  </transition-group>
</div>