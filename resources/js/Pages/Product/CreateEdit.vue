<template>
  <app-layout :title="pageName">
    <template #header>
      <template-header :title="pageName" />
    </template>
    <product-form :product="product" />
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import TemplateHeader from "@/Components/TemplateHeader.vue";
import ProductForm from "./Form.vue";

export default {
  components: {
    AppLayout,
    TemplateHeader,
    ProductForm,
  },
  props: {
    pageName: {
      type: String,
      default: "Cadastrar",
    },
    product: {
      type: Object,
      default: null,
    },
  },
};
</script>
