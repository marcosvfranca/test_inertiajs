<template>
  <app-layout title="Clientes">
    <template #header>
      <template-header
        title="Clientes"
        :routeButton="route('customers.create')"
      />
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <customer-list :customers="customers" v-if="customers.total" />
          <alert-danger v-else>
            Nenhum cliente cadastrado, cadastre-o na opção acima.
          </alert-danger>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import TemplateHeader from "@/Components/TemplateHeader.vue";
import CustomerList from "./List.vue";
import AlertDanger from "@/Components/Alerts/Danger.vue";

export default {
  components: {
    AppLayout,
    TemplateHeader,
    CustomerList,
    AlertDanger,
  },
  props: {
    customers: Object,
  },
};
</script>
