<template>
  <td-table-list class="text-right text-sm font-medium">
    <button-edit v-if="routes.edit" :href="routes.edit" />
    <button-delete v-if="routes.delete" @click="$inertia.delete(routes.delete)" />
  </td-table-list>
</template>

<script>
import ButtonDelete from "../Buttons/ButtonDelete.vue";
import ButtonEdit from "../Buttons/ButtonEdit.vue";
import TdTableList from "./TdTableList.vue";

export default {
  components: {
    TdTableList,
    ButtonEdit,
    ButtonDelete
  },
  props: {
    routes: {
      edit: {
        type: String,
        default: null,
      },
      toggle: {
        type: String,
        default: null,
      },
      delete: {
        type: String,
        default: null,
      },
    },
  },
};
</script>
