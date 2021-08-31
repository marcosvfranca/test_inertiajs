<template>
  <app-layout :title="pageName">
    <template #header>
      <template-header :title="pageName" />
    </template>
    <customer-form :customer="customer" />
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import TemplateHeader from "@/Components/TemplateHeader.vue";
import CustomerForm from "./Form.vue";

export default {
  components: {
    AppLayout,
    TemplateHeader,
    CustomerForm,
  },
  props: {
    pageName: {
      type: String,
      default: "Cadastrar",
    },
    customer: {
      type: Object,
      default: null,
    },
  },
};
</script>
