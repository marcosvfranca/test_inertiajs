<template>
  <app-layout title="Produtos">
    <template #header>
      <template-header
        title="Produtos"
        :routeButton="route('products.create')"
      />
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <product-list :products="products" v-if="products.total" />
          <alert-danger v-else>
            Nenhum produto cadastrado, cadastre-o na opção acima.
          </alert-danger>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import TemplateHeader from "@/Components/TemplateHeader.vue";
import ProductList from "./List.vue";
import AlertDanger from "@/Components/Alerts/Danger.vue";

export default {
  components: {
    AppLayout,
    TemplateHeader,
    ProductList,
    AlertDanger,
  },
  props: {
    products: Object,
  },
};
</script>
