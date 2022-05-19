class ArchiveProject{
    constructor(wrapper, options){
        // console.log({ wrapper });
    let activeTags = [];
    
    const buttons = wrapper.querySelectorAll(`.project-btn`);
    buttons.forEach(function (btn) {
        btn.addEventListener('click', () => btnClicked(btn))
    })

    function btnClicked(btn) {
        const termId = +btn.dataset.tagId
        btn.classList.toggle('btn-active')
        if (activeTags.includes(termId)) {
            activeTags = activeTags.filter(activeTag => activeTag !== termId)
        } else {
            // debugger
            activeTags.push(termId)
        }
        filterProjects();
    }

    function filterProjects() {

        const projects = document.querySelectorAll('.project-card');
        console.log(activeTags)
        // debugger
        if (activeTags.length === 0) {
            projects.forEach(project => {
                project.style = "display: grid"
            })
            return
        }

        projects.forEach(project => {
            const ids = JSON.parse(project.dataset.postTags)
            let isactive = ids.some((id) => activeTags.includes(id))

            if (isactive) {
                project.style = "display: grid"
            } else {
                project.style = "display: none"

            }

        })

    }

    }
}

export default ArchiveProject;