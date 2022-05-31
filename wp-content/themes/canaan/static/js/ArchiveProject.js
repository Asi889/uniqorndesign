class ArchiveProject {
    constructor(wrapper, options) {
        // console.log({ wrapper });
        let activeTags = [];

        const buttons = wrapper.querySelectorAll(`.project-btn`);
        buttons.forEach(function (btn) {
            btn.addEventListener('click', () => btnClicked(btn))
        })

        function toggleCheckmark(btn) {

            // btn.firstChild.style = "display: block";
        }

        function btnClicked(btn) {
            toggleCheckmark(btn)
            const termId = +btn.dataset.tagId
            btn.classList.toggle('btn-active')
            if (activeTags.includes(termId)) {
                activeTags = activeTags.filter(activeTag => activeTag !== termId)
                // btn.firstChild.style = "display: none";
            } else {
                // debugger
                // btn.firstChild.style = "display: block";
                activeTags.push(termId)
            }
            // filterProjects(btn);
        }

        function filterProjects(btn) {

            const projects = document.querySelectorAll('.project-card');
            
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