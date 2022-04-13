import { CLOSE_MUTATION, OPEN_MUTATION } from "./mutations";

export const TOGGLE_ACTION = 'toggle';
export const OPEN_ACTION = 'open';
export const CLOSE_ACTION = 'close';


export default {
    [TOGGLE_ACTION]({ commit, state}) {
        if (state.opened === false) {

            commit(OPEN_MUTATION);

        } else {

            commit(CLOSE_MUTATION);

        }
    },

    [OPEN_ACTION]({ commit }) {
        commit(OPEN_MUTATION);
    },

    [CLOSE_ACTION]({ commit }) {
        commit(CLOSE_MUTATION);
    }
};
