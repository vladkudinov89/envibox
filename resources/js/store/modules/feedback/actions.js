import httpService from '../../../services/common/httpService';

export default {
    sendFeedback: (context , data) => {
        return new Promise((resolve, reject) => {
            httpService.post('/feedback' , data)
            .then((response) => {
                context.commit('SET_STATUS' , response.data)
                resolve(response.data);
            })
            .catch(function (err) {
                reject(err);
            });
        });
    },
}
