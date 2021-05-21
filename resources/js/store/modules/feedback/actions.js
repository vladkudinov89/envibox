import httpService from '../../../services/common/httpService';

export default {
    testFeedback: (context) => {
        return new Promise((resolve, reject) => {
            httpService.get('/test')
            .then((response) => {
                context.commit('TEST' , response.data)
                resolve(response.data);
            })
            .catch(function (err) {
                reject(err);
            });
        });
    },
}
