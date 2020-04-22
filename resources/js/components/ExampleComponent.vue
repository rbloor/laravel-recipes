<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" v-for="recipe in recipes" :key="recipe.id">
        <div class="card mb-4">
          <img class="card-img" src="https://picsum.photos/600/300/?image=25" alt="Bologna" />
          <div class="card-body">
            <h4 class="card-title">Pasta with Prosciutto</h4>
            <small class="text-muted cat">
              <i class="far fa-clock text-info"></i> 30 minutes
              <i class="fas fa-users text-info"></i> 4 portions
              <i class="fas fa-users text-info"></i> 567
            </small>
            <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
            <a :href="'/recipe/'+recipe.id" class="btn btn-info text-white">Read Recipe</a>
          </div>
          <div class="card-footer text-muted d-flex justify-content-between border-top-0">
            <div class="views">Oct 20, 12:45PM</div>
            <div class="stats">
              <i class="far fa-eye"></i> 1347
              <i class="far fa-comment"></i> 12
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav>
      <ul class="pagination justify-content-center">
        <li :class="[{disabled: !pagination.prev_page_url}]" class="page-item">
          <a class="page-link" href="#" @click="getRecipes(pagination.prev_page_url)">Previous</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">{{ pagination.current_page }} of {{ pagination.last_page }}</a>
        </li>
        <li :class="[{disabled: !pagination.next_page_url}]" class="page-item">
          <a class="page-link" href="#" @click="getRecipes(pagination.next_page_url)">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      recipes: [],
      pagination: {},
      loading: true,
      errored: false
    };
  },
  methods: {
    getRecipes(api_url) {
      axios
        .get(api_url)
        .then(response => {
          this.recipes = response.data.data;
          this.paginator(response.data.meta, response.data.links);
        })
        .catch(error => {
          console.log(error);
          this.errored = true;
        })
        .finally(() => (this.loading = false));
    },
    paginator(meta, links) {
      this.pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev
      };
    }
  },
  mounted() {
    this.getRecipes("/api/recipes");
  }
};
</script>
